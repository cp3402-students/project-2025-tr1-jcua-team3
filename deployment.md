# Deployment

This is where we will describe our development and deployment workflow in enough detail that a new team member or someone taking over the project could follow to successfully develop theme updates locally, then test and deploy them to your staging and live sites. This should include aspects such as project management, version control, testing and automation. **Do not provide private details like passwords.**

## Development Environment Setup
To develop the theme locally, Docker is used to create an isolated environment that ensures consistency across all stages of development. If you're unfamiliar with Docker, ensure you have Docker Desktop installed and running.

- Clone the theme repository to your local environment.

`git clone <repository-url>`
`cd <theme-directory>`

- Docker Setup:

If Docker is being used, ensure the necessary Docker setup files (e.g., docker-compose.yml) are present in the repository.

Build and start the Docker containers:

`docker-compose up --build`

### Version Control with GitHub
For version control, we use GitHub along with Git’s basic commands. Developers are expected to follow best practices for committing, pulling, and pushing changes.

* Basic Git Commands:

- To push changes:
`git add .`
`git commit -m "Commit message"`
`git push origin main`

- To pull changes:
`git pull origin main`

You can also use a code editor like Visual Studio Code, which has integrated Git support, making it easier to commit and push changes directly from the editor.

## Download starter theme
## Base Theme Version

Once you've set up your own local environment (WAMP, MAMP, XAMP, Docker), download the starter theme from:

- `/project_resources/themes/starter-theme.zip`

Use the theme editor in wordpress to install the starter theme

## Sassified Theme Version with Gulp

### 1. Download the sass version:
- `/project_resources/themes/starter-theme-sass.zip`

### 2. Install and Set Up the Theme
- Extract the `starter-theme-sass.zip` file.
- Move the extracted folder to your local WordPress installation directory under `/wp-content/themes/`

### 3. Install Node.js and Dependencies
- Ensure [Node.js](https://nodejs.org/) is installed.
- Open your terminal and navigate to the theme directory:
>bash cd `/path/to/starter-theme-sass`
- Install the required dependencies:
>bash npm install

### 4. Set Up Gulp for Sass Compilation
- Install Gulp globally:
>bash npm install -g gulp-cli
- Start Gulp to watch and compile Sass:
>bash gulp

### Testing the Theme
Testing the theme ensures it works well under a variety of conditions. We use the Theme Unit Test to test the theme.

* Download Test Data:

- Clone the theme test data file themeunittestdata.wordpress.xml from the GitHub repository:

`wget https://raw''.githubusercontent.com/WPTT/theme-unit-test/master/themeunittestdata.wordpress.xml`

Or Download a copy from https://raw.githubusercontent.com/WPTT/theme-unit-test/master/themeunittestdata.wordpress.xml

Import Test Data into WordPress:

> Go to Tools => Import => WordPress.

Select the XML file from your computer and click on "Upload file and import".

Under "Import Attachments", check "Download and import file attachments" and click Submit.

# Set up GitHub Actions to Automate deployment
### 1. Create the GitHub Actions Workflow Directory

Before you set up the workflow, you need to organise the project structure to place the workflow file.

Steps:

- Open your terminal or use a code editor with an integrated terminal like Visual Studio Code.
- Navigate to your GitHub repository on your local machine. This means you should be inside the folder that contains the project you’re working on.
- Create the GitHub Actions workflow directory:
- Run the following command in your terminal:

`mkdir -p .github/workflows`

- This creates the .github folder and a subfolder workflows, where your workflow file will reside. This is where GitHub expects workflow files to be stored.

### 2. Create a New Workflow YAML File

Now, you’ll create a file in this new directory to define your deployment process.
Steps:

In the `.github/workflows/` directory, create a new YAML file. You can name this file `deploy.yml` because it’s related to deployment.

- Run the following command in your terminal:

`touch .github/workflows/deploy.yml`

Alternatively, you can create this file directly in your code editor.

### 3. Write the Workflow for WordPress Deployment

This is where the magic happens! You will define the workflow’s steps to automate the deployment of your WordPress site. GitHub Actions uses YAML syntax for defining these workflows.

show our deploy file

## 4. Configure GitHub Secrets for Secure Access
### 4.1. Generate the SSH Key Pair
First, you must generate an SSH key pair (private and public keys).
Open your terminal (on macOS, Linux, or Windows with Git Bash or WSL).
Run the following command to generate the SSH key pair:
`ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`
Press Enter when prompted to specify a file to save the key (you can just use the default path).
You’ll be asked for a passphrase (optional but recommended for added security).
This will generate two files:
Private Key (usually saved as ~/.ssh/id_rsa).
Public Key (saved as ~/.ssh/id_rsa.pub).

### 4.2. Copy the Private Key
Next, you need to store the private key for use in GitHub Actions securely.
Open the private key file (id_rsa) in a text editor.
Copy everything in the file, including the 
>-----BEGIN OPENSSH PRIVATE KEY----- and -----END OPENSSH PRIVATE KEY----- lines
### 4.3. Add the Public Key to Your Server
For your server to authenticate via SSH, you need to add the public key to your server’s 
>~/.ssh/authorized_keys> file
- Copy the contents of the id_rsa.pub file (this is the public key).
- Log into your server via SSH:
`ssh bitnami@<server-ip>`
- Open the authorized_keys file on your server:
`nano ~/.ssh/authorized_keys`
Paste the public key into the file and save it.
Now your server will accept SSH connections from the corresponding private key.
### 4.4 Configure GitHub Secrets for Secure Access
You need to store sensitive data (like the SSH private key) securely in GitHub Secrets so that it’s not exposed in the workflow file.
- * Steps to add SSH key as a GitHub Secret:
- Go to your GitHub repository.
- Click on Settings (near the top of the page).
- On the left sidebar, click on Secrets and Variables> Actions.
- Click on New Repository secret.
- Add a secret with the name SSH_PRIVATE_KEY and paste the SSH private key in the value field.
- Add another secret named REMOTE_SERVER and put the IP or domain of your remote server or include that in your deploy file
This is important because GitHub Actions will securely access these secrets when running the workflow.

### 5. Push the Changes to GitHub

Now, commit the deploy.yml workflow file and push it to GitHub.

Steps:

1. Run these commands to add, commit, and push the file:

`git add .github/workflows/deploy.yml`

`git commit -m "Add deployment workflow for WordPress"`

`git push origin main`

2. These commands:

- Add the new workflow file to your Git repository.

- Commit the file with a message describing the change.

- Push the changes to GitHub.
### 6. Verify the Deployment
Once you push the changes, GitHub Actions will automatically trigger the workflow if the conditions are met (in this case, a push to the main branch).

Steps:

1. Go to your GitHub repository and click on the Actions tab. You will see a list of workflows that have been triggered.

2. Click on the running workflow to view detailed logs.

3. The logs will show the step-by-step process, including any errors or successes.

4. After the workflow completes successfully, check your WordPress site to verify that it was deployed correctly.
