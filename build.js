import { execSync } from 'child_process';
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

console.log('Building with Vite...');
execSync('vite build', { stdio: 'inherit' });

console.log('Copying manifest to correct location...');
const sourceManifest = path.join(__dirname, 'public', 'build', '.vite', 'manifest.json');
const targetManifest = path.join(__dirname, 'public', 'build', 'manifest.json');

if (fs.existsSync(sourceManifest)) {
    fs.copyFileSync(sourceManifest, targetManifest);
    console.log('✅ Manifest copied successfully!');
} else {
    console.log('❌ Source manifest not found!');
}

console.log('Build completed!');
