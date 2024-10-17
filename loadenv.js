require('dotenv').config();
const { execSync } = require('child_process');
execSync('ENV=development npm-run-all --parallel sync scripts:watch styles:watch', { stdio: 'inherit' });
