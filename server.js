const express = require('express');
const fs = require('fs');
const path = require('path');
const app = express();

app.use(express.json());
app.use(express.static('/Applications/XAMPP/xamppfiles/htdocs/cti-stix-visualization-master'));

app.get('/', (req, res) => {
    res.sendFile(path.join('/Applications/XAMPP/xamppfiles/htdocs/cti-stix-visualization-master', 'index.html'));
});

app.post('/save', (req, res) => {
    const jsonContent = req.body;
    const filePath = path.join('/Applications/XAMPP/xamppfiles/htdocs/cti-stix-visualization-master', 'data.json');

    fs.writeFile(filePath, JSON.stringify(jsonContent, null, 4), (err) => {
        if (err) {
            console.error('Error writing file:', err);
            res.status(500).send('Failed to save file');
        } else {
            res.send('File saved successfully');
        }
    });
});

app.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
});
