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









# Movie Finder Application

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

## Local Development Setup

### Backend Setup
1. Install Python dependencies:
```bash
cd backend
pip install -r requirements.txt
```

2. Set up environment variables:
Create a `.env` file in the root directory with:
```env
TMDB_API_KEY=your_tmdb_api_key
RAPIDAPI_KEY=your_rapidapi_key
RAPIDAPI_HOST=search-gpt.p.rapidapi.com
```

3. Run the Flask backend:
```bash
python app.py
```
The backend will run on http://localhost:5000

### Frontend Setup
1. Install Node.js dependencies:
```bash
cd frontend
npm install
```

2. Start the development server:
```bash
npm run dev
```
The frontend will run on http://localhost:3000

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
project/
├── backend/
│   ├── api/
│   │   ├── movie_service.py
│   │   └── routes.py
│   ├── config/
│   │   └── settings.py
│   └── app.py
├── frontend/
│   ├── public/
│   ├── src/
│   │   ├── components/
│   │   ├── services/
│   │   └── styles/
│   ├── index.html
│   └── package.json
├── .env
├── requirements.txt
└── vercel.json
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
