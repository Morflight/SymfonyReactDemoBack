SymfonyReactDemoBack

App goal :
Create a standard API following good practices.

Initialization :

`git clone git@github.com:Morflight/SymfonyReactDemoBack.git`
`composer install`

Do not forget to add your own Marvel api credentials in a .env file.
For developpment purposes, please use a .env.local (gitignored by default).

Usage :
First, run the server
`symfony server:start`

Then, using Insomnia/Postman or even your browser
GET https://localhost:8000/test

This is the only functionning endpoint for now, there's more to come.
