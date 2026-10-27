<?php
$lines = file('C:/Users/RIO MAULANA/.gemini/antigravity-ide/brain/07073571-47bc-4542-80de-d993d272cbaf/.system_generated/logs/transcript_full.jsonl');
foreach ($lines as $line) {
    if (strpos($line, '"step_index":172') !== false) {
        $data = json_decode($line, true);
        file_put_contents('temp_modul9.txt', $data['content']);
        echo "Found and written! Length: " . strlen($data['content']) . "\n";
        break;
    }
}
