import json

log_path = r"C:\Users\farma\.gemini\antigravity-ide\brain\f11f656c-f7f3-4e41-8113-37e7a2e3e1f8\.system_generated\logs\transcript.jsonl"
with open(log_path, 'r', encoding='utf-8') as f:
    for line in f:
        obj = json.loads(line)
        if obj.get('type') == 'USER_INPUT' and 'logos-17.png' in obj.get('content', ''):
            content = obj['content']
            start_key = 'Page "KB17 – Partners"'
            idx = content.find(start_key)
            if idx != -1:
                # print 6000 characters from the match
                print(content[idx:idx+8000])
                break
