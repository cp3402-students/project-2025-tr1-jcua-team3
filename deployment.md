# Deployment Workflow

This guide describes the development and deployment workflow for the project, covering environment setup, version control, testing, and automated deployment. It ensures that new team members or someone taking over can seamlessly develop, test, and deploy theme updates locally, then push them to staging and live sites.

## Development Environment Setup
To develop the theme locally, Docker is used to create an isolated environment that ensures consistency across all stages of development. If you're unfamiliar with Docker, ensure you have Docker Desktop installed and running.

- Clone the theme repository to your local environment.

`git clone <repository-url>`
`cd <theme-directory>`

- Docker Setup:

If Docker is being used, ensure the necessary Docker setup files (e.g., docker-compose.yml) are present in the repository.

Use this [documentation](https://github.com/docker/awesome-compose/tree/master/official-documentation-samples/wordpress/) to set up docker in your device.

Build and start the Docker containers:

`docker-compose up --build`

## Version Control with GitHub
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
### Sassified Theme Version with Gulp

### 1. Download the sass version:
Once you've set up your own local environment (WAMP, MAMP, XAMP, Docker), download the starter theme from:
- `/project_resources/themes/starter-theme-sass.zip`

### 2. Install and Set Up the Theme
- Extract the `starter-theme-sass.zip` file.
- Move the extracted folder to your local WordPress installation directory under `/wp-content/themes/`

### 3. Install Node.js and Dependencies
- Ensure [Node.js](https://nodejs.org/) is installed.
- Open your terminal and navigate to the theme directory:
> cd `/path/to/starter-theme-sass`
- Install the required dependencies:
> npm install

### 4. Set Up Gulp for Sass Compilation
- Install Gulp globally:
> npm install -g gulp-cli
- Start Gulp to watch and compile Sass:
> gulp 

## Testing the Theme
Testing the theme ensures it works well under a variety of conditions. We use the Theme Unit Test to test the theme.

* Download Test Data:

- Clone the theme test data file themeunittestdata.wordpress.xml from the GitHub repository:

`wget https://raw''.githubusercontent.com/WPTT/theme-unit-test/master/themeunittestdata.wordpress.xml`

Or Download a copy from https://raw.githubusercontent.com/WPTT/theme-unit-test/master/themeunittestdata.wordpress.xml

Import Test Data into WordPress:

> Go to Tools => Import
If WordPress is not installed, install it and press <em>Run Importer</em>

Then, click choose file and select the XML file from your computer and then click on "Upload file and import".

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

- In the `.github/workflows/` directory, create a new YAML file. You can name this file `deploy.yml` because it’s related to deployment.

- Run the following command in your terminal:

`touch .github/workflows/deploy.yml`

Alternatively, you can create this file directly in your code editor.

### 3. Write the Workflow for WordPress Deployment

Next,you will define the workflow’s steps to automate the deployment of your WordPress site. GitHub Actions uses YAML syntax for defining these workflows.

See our deploy.yml [here](https://github.com/cp3402-students/project-2025-tr1-jcua-team3/blob/main/.github/workflows/deploy.yml).

## 4. Configure GitHub Secrets for Secure Access
### 4.1. Generate the SSH Key Pair
- First, you must generate an SSH key pair (private and public keys).
- Open your terminal (on macOS, Linux, or Windows with Git Bash or WSL).
- Run the following command to generate the SSH key pair:
`ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`
- Press Enter when prompted to specify a file to save the key (you can just use the default path).
You’ll be asked for a passphrase (optional but recommended for added security).
- This will generate two files:
i) Private Key (usually saved as ~/.ssh/id_rsa).
ii) Public Key (saved as ~/.ssh/id_rsa.pub).

### 4.2. Copy the Private Key
Next, you need to store the private key for use in GitHub Actions securely.
Open the private key file (id_rsa) in a text editor.
Copy everything in the file, including 
>-----BEGIN OPENSSH PRIVATE KEY----- and -----END OPENSSH PRIVATE KEY----- 

### 4.3 Configure GitHub Secrets for Secure Access
Then, you need to store sensitive data (like the SSH private key) securely in GitHub Secrets so that it’s not exposed in the workflow file.
- * Steps to add SSH key as a GitHub Secret:
- Go to your GitHub repository.
- Click on Settings (near the top of the page).
- On the left sidebar, click on Secrets and Variables> Actions.
- Click on New Repository secret.
- Add a secret with the name SSH_PRIVATE_KEY and paste the SSH private key in the value field.
This is important because GitHub Actions will securely access these secrets when running the workflow.

### 4.4 Add the Public Key to Your Server
For your server to authenticate via SSH, you need to add the public key to your server’s 
> ~/.ssh/authorized_keys> file
- Copy the contents of the id_rsa.pub file (this is the public key).
- Log into your server via SSH:
> ssh bitnami@<server-ip>
- Open the authorized_keys file on your server:
> nano ~/.ssh/authorized_keys
Paste the public key into the file and save it.
Now your server will accept SSH connections from the corresponding private key.

### 5. Push the Changes to GitHub

Now, commit the deploy.yml workflow file and push it to GitHub.

Steps:

1. Run these commands to add, commit, and push the file(Make sure you're inside your project’s local Git repository directory.):

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

# Project Management & Team Workflow
i)  We used Trello for project management:

- Tasks were organized into boards.
- Each task was assigned to a group member with a due date.
- Progress was tracked through lists (To Do, In Progress, Done).

ii) Slack was used for team communication:
- Daily updates and task coordination.
- GitHub notifications were integrated with Slack so any commit or pull request would notify the team in real-time.

iii)We also used Discord for voice meetings:
- We also used Discord to help each other troubleshoot issues, especially when someone got stuck or a git conflict came up.

iv) Weekly stand-up meetings were held to check in, set priorities, and discuss progress.