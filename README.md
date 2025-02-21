# fazar
the mr.html is the page where users use to generate movies and it has its own css file which is mr.css
index.html is the home page 
the "get started" button in the home page   for now is used to redirect users to the mr.html page, but in future i would like that button to redirect users to sign up and login page 
the "try now" Button will be used to redirect users that don't want an account with fazar to the mr.html page 
and the navabar  we will figure out if we should add all those pages or add them later as updates in the future 
all the JavaScript for both the mr.html and index.html are in one place which js script.js
that result.html page might not be useful to us again , we can't delete it , because we might need it 
so with everything i have stated, we can now find an api for the job and do other necessary things 
thanks once again for joining me 

DEY PLAYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY!!!!!!!!!!!









#FAZAR Movie Finder Application

A modern web application that combines AI-powered movie suggestions with TMDB movie database search. Built with Flask backend and JavaScript frontend.

## Features
- 🎬 Search movies using natural language descriptions
- 🤖 AI-powered movie suggestions using GPT-3.5
- 🎯 Accurate movie search using TMDB database
- 💅 Beautiful, responsive UI with Tailwind CSS
- 🔒 Secure backend API handling

## Live Demo
[Add your deployed application URL here]

## Technologies Used
- **Frontend**: HTML5, CSS3 (Tailwind CSS), JavaScript
- **Backend**: Python, Flask
- **APIs**: TMDB API, RapidAPI Search GPT
- **Deployment**: Vercel (Frontend & Backend)

## How to Set Up and Run the FAZAR Movie Recognition App
1. Download the FileS

-Download the movie_recognition_app.zip file.
-Extract it to a folder on your computer.

3. Install Python
-Download and install Python from python.org.
-Important: During installation, check "Add Python to PATH" to avoid any issues later.

4. Open Terminal or Command Prompt

-Mac: Open Terminal.
-Windows: Open Command Prompt.

5. Navigate to the Extracted Folder
   
-Run the following command in Terminal or Command Prompt:

-bash
-Copy
-Edit

-cd path/to/extracted/folder

-(Replace "path/to/extracted/folder" with the actual path where you extracted the files.)

5. Install Required Packages
   
Run the following command to install the necessary dependencies:

-bash
-Copy
-Edit

pip install -r requirements.txt

6. Create an Environment File

-In the extracted folder, create a new file named .env.

-Open the file and add the following lines:

-Copy
-Edit

-TMDB_API_KEY=b4f009f633383dd06923ff49450c59b1

-RAPIDAPI_KEY=70555fcaffmsh4d70f98f2a5e381p14dacejsnb9c9a49598f3

-RAPIDAPI_HOST=search-gpt.p.rapidapi.com


8. Start the Server
   
Run the following command:

-bash
-Copy
-Edit
python app.py

8.1. Open the App

Open the mr.html file in your web browser.

Start searching for movies by describing them!

9. Example Searches
Try searching for movies using descriptions like:

✅ "A movie about a father looking for his lost son in the ocean with a forgetful fish."

✅ "A movie where people enter dreams to plant ideas in someone's mind."

✅ "A movie about toys that come to life when humans aren't around."

## Troubleshooting Tips
If you run into any issues:
✔️ Ensure Python is installed and added to PATH.

✔️ Verify that all files are in the same folder.

✔️ Check that the .env file exists and contains the correct API keys.

✔️ If port 5002 is in use, try changing the port number in app.py.

✔️ Restart your computer if the port is still busy.




## Deployment Instructions


### Deploy to Vercel
1. Fork/Clone this repository
2. Create a new project on Vercel
3. Connect your GitHub repository
4. Add your environment variables in Vercel:
   - `TMDB_API_KEY`
   - `RAPIDAPI_KEY`
   - `RAPIDAPI_HOST`
5. Deploy!

### Alternative Deployment Options
You can also deploy to:
- Heroku
- DigitalOcean
- AWS
- Google Cloud Platform

## Project Structure
```
movie_recognition_app/
│
├── # Frontend Files
│   ├── mr.html           # Main HTML file with the search interface
│   ├── mr.css            # Styles for the search interface
│   └── script.js         # JavaScript for handling search and displaying results
│
├── # Backend Files
│   ├── app.py            # Main Flask application
│   └── backend/
│       └── api/
│           ├── routes.py         # API endpoints for movie search
│           └── user_tracking.py  # Handles user limits and tracking
│
├── # Configuration Files
│   ├── .env              # API keys and configuration
│   └── requirements.txt  # Python package dependencies
│
└── README.md            # Instructions for setup and usage
```


```
movie_recognition_app.zip
├── mr.html
├── mr.css
├── script.js
├── app.py
├── backend/
├── .env
├── requirements.txt
└── README.md
```


## Submission Checklist
- [ ] All code is properly commented and documented
- [ ] Environment variables are properly set up
- [ ] Application is tested and working in production
- [ ] README is complete with setup and deployment instructions
- [ ] All API keys are valid and active
- [ ] Frontend build is optimized for production
- [ ] Backend is properly configured for production
- [ ] Error handling is implemented
- [ ] Responsive design works on all devices

## Contributing
Feel free to submit issues and enhancement requests!

## License
This project is licensed under the MIT License - see the LICENSE file for details.
