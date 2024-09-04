# STIX Viewer
<img width="1440" alt="image" src="https://github.com/user-attachments/assets/9fc2a818-1af8-4432-94da-c42129483ae2">



This repository hosts the **STIX Viewer**, a web application designed to visualize and interact with STIX data in a structured and user-friendly manner. The viewer provides multiple functionalities, including extracting indicators, managing STIX data, running commands, and toggling between different forms of data input and visualization.

## Features

![board-facetious-quipster-2](https://github.com/user-attachments/assets/4d8721d7-527d-4c6d-a906-6cc4d4184fa9)

- **Indicators Tab**: Extract and display indicators from uploaded data, such as `indicators.txt`. Users can interact with the data, select or deselect specific indicators, and copy them to the clipboard.
  
- **Llama CLI Tab**: Provides a command execution interface that allows users to run commands, view real-time output, and stop running processes.

- **Main Tab**: The primary view for interacting with STIX data. It offers the following capabilities:
  - Toggle between "Submit" and "Merge" modes to either input new data or merge existing data with new STIX 2.1 JSON.
  - Visualize and interact with the STIX data using a canvas and detailed sidebars for selected nodes, incoming and outgoing connections, and a legend.

- **JSON Editor**: A full-featured JSON editor that integrates with Ace Editor, allowing users to edit STIX JSON data directly. It includes syntax validation and error handling for easy and safe modifications.

  <img width="1419" alt="image" src="https://github.com/user-attachments/assets/1f831546-7fd7-435b-99db-1a88c683e369">


## Usage

### Extracting Indicators
1. Go to the **Indicators Tab**.
2. Upload your data (e.g., from a Telegram chat).
3. Click "Extract Indicators" to process the data and display the results.
4. Use the provided interface to select, deselect, and copy indicators.

### Running Commands
1. Navigate to the **Llama CLI Tab**.
2. Click the "Run Command" button to execute a command.
3. Monitor the output in real-time.
4. Click "Stop Command" to halt the running process.

### Submit or Merge Data
1. In the **Main Tab**, use the toggle switch to choose between **Submit** and **Merge** modes.
   - **Submit Mode**: Enter new raw STIX data.
   - **Merge Mode**: Merge new data into an existing STIX 2.1 JSON structure.
2. Input your data in the provided text area.
3. Click "Submit" or "Merge" to process the data.

### Editing JSON Data
1. Use the JSON editor to load, view, and modify your STIX data in JSON format.
2. Click "Save Changes" to validate and apply your edits.

<img width="1425" alt="image" src="https://github.com/user-attachments/assets/eb09119e-0f3f-4fba-a8db-33c610de1c6c">
<img width="1406" alt="image" src="https://github.com/user-attachments/assets/44ac571f-e6cd-451a-9ae0-c386f906ac72">

## Dependencies

The following dependencies are required to run this project:
- **Ace.js**: A JavaScript-based code editor used for inline JSON editing.
- **Require.js**: A JavaScript file and module loader used for structuring the JavaScript code.
- **STIX 2.1 JSON Schema**: The system works with STIX 2.1 data structures, making it compatible with standard threat intelligence formats.

## Installation

To set up the project locally, follow these steps:

1. Clone this repository:
   ```bash
   git clone https://github.com/ashishkhar/STIX-Viewer.git
   ```
2. Open `index.html` in your browser to run the application locally.
3. Ensure that your server has the required backend endpoints (`submit.php`, `merge.php`, etc.) to handle form submissions and data processing.


## Contributing

We welcome contributions! If you have suggestions for improvements or new features, feel free to open a pull request or file an issue.
