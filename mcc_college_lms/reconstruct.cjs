const fs = require('fs');

const logPath = String.raw`C:\Users\DELL\.gemini\antigravity\brain\b0190972-9a18-4ddd-bd15-9b25bfb84822\.system_generated\logs\overview.txt`;
const lines = fs.readFileSync(logPath, 'utf8').split('\n');

let targetContent = null;

for (let line of lines) {
    if (!line.trim()) continue;
    try {
        let data = JSON.parse(line);
        // Look for tool responses that show the file content, e.g. from view_file
        if (data.type === 'TOOL_CALL_RESPONSE' && data.responses) {
             for (let r of data.responses) {
                 if (r.output && typeof r.output === 'string' && r.output.includes('Showing lines 1 to 378') && r.output.includes('home.blade.php')) {
                     // Wait, the output has line numbers, but we can extract it.
                 }
             }
        }
        
        // Let's also look for the actual tool call
        if (data.tool_calls) {
            for (let call of data.tool_calls) {
                if (call.name === 'write_to_file' && call.args && call.args.TargetFile && call.args.TargetFile.includes('home.blade.php')) {
                     targetContent = call.args.CodeContent;
                }
                else if ((call.name === 'replace_file_content' || call.name === 'multi_replace_file_content') && call.args && call.args.TargetFile && call.args.TargetFile.includes('home.blade.php')) {
                     if (!targetContent) {
                         // Need initial content, maybe we can fetch the state from the git commit
                         targetContent = fs.readFileSync('C:/Users/DELL/.gemini/antigravity/scratch/mcc learning/mcc_college_lms/resources/views/home.blade.php', 'utf8');
                     }
                     // Apply replacement
                     let chunks = [];
                     if (call.name === 'replace_file_content') {
                         chunks.push(call.args);
                     } else {
                         chunks = JSON.parse(call.args.ReplacementChunks);
                     }
                     
                     // Try to apply chunks (simplified string replace since we only need the final output)
                     for (let c of chunks) {
                         targetContent = targetContent.replace(c.TargetContent, c.ReplacementContent);
                     }
                }
            }
        }
    } catch(e) {}
}

if (targetContent) {
    fs.writeFileSync('restored_home.blade.php', targetContent);
    console.log("Reconstructed and written to restored_home.blade.php");
} else {
    console.log("No edits found to reconstruct.");
}
