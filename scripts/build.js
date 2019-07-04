const {
    readdirSync,
    readFileSync,
    statSync,
    existsSync,
    mkdirSync,
    writeFileSync,
} = require('fs');
const { join } = require('path');
const directoryPath = join(__dirname, '../src');

const isDirectory = function isDirectory(dirName, path = null) {
    return statSync(`${path ? path : directoryPath}/${dirName}`).isDirectory();
}

const formatContents = function formatContents(content) {
    return content.replace(/\n/g, '\r\n')
        .replace(/    /g, '\t')
        .replace(/\$/g, '$$$')
        .replace(/\+/g, '$');
};

const main = function main() {
    const dirs = readdirSync(directoryPath).filter(item => isDirectory(item));
    const snippetFolderPath = join(__dirname, '../snippets');
    
    if (!existsSync(snippetFolderPath)) {
        mkdirSync(snippetFolderPath);
    }

    dirs.forEach(dir => {
        const snippets = readdirSync(`${directoryPath}/${dir}`).filter(item => item.slice(-4) === '.php');
        let obj = {};

        snippets.forEach((snippet, key) => {
            const contents = readFileSync(`${directoryPath}/${dir}/${snippet}`, 'utf8');
            const fileName = snippet.split('.')[0];
            const [ prefix, description ] = fileName.split(' - ');
            const body = formatContents(contents);
            obj[prefix] = {
                prefix,
                body,
                description,
            };
        });

        writeFileSync(`${snippetFolderPath}/${dir}.json`, JSON.stringify(obj, null, '\t'));
    });
};

main();