const fs = require('fs');

const data = fs.readFileSync('C:/Users/DELL/.gemini/antigravity/brain/b0190972-9a18-4ddd-bd15-9b25bfb84822/.system_generated/logs/overview.txt', 'utf8');
const lines = data.split('\n');

let bestContent = '';
for (let line of lines) {
    if (line.includes('home.blade.php') && (line.includes('ReplacementContent') || line.includes('CodeContent'))) {
        try {
            const parsed = JSON.parse(line);
            if (parsed.tool_calls) {
                for (let call of parsed.tool_calls) {
                    if (call.name === 'replace_file_content' || call.name === 'write_to_file' || call.name === 'multi_replace_file_content') {
                        if (JSON.stringify(call.args).includes('home.blade.php')) {
                             if (call.args.ReplacementContent) bestContent = call.args.ReplacementContent;
                             if (call.args.CodeContent) bestContent = call.args.CodeContent;
                             if (call.args.ReplacementChunks) {
                                 // Don't deal with chunks, just hope there's a full write
                             }
                        }
                    }
                }
            }
        } catch (e) {
            // ignore
        }
    }
}

fs.writeFileSync('extracted_home.txt', bestContent);
console.log('Done length:', bestContent.length);
