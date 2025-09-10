# Blog on Vue.js

## Functionality
View all articles with page navigation when scrolling.
View selected article.
Filter by category or author.
Publishing articles is available after registration.
User personal account with the ability to add, edit, delete articles.
Admin panel for managing blog content.

## Peculiarities
Authorization using JWT tokens.
Prerendering.
The server API is implemented in PHP.

## Technologies used in development:
- Vue.js
- Vue CLI
- Vuex
- Vue Router
- Vue-resource
- PHP, MySQL
- JWT

## Run in development mode
Place all folders except dist, prerendered, server in your project folder on your PC.
Place the contents of the server folder in the root of the folder on the server.
In vue.config.js and build.prerender.js, specify the settings for proxy: target: "your domain (where the contents of the server folder are located).
In components/page/Article.vue and components/page/cabinet/UpdateAticle.vue, the paths to img are "for development".
```  
Install all dependencies: npm install.
```  
On the server:
- create a database, import blog.sql.
- in api/config/settings.php specify the data for connecting to the database.

````
npm run serve
````

## Launch on server
Place the contents of the server folder in the root of the server folder.
In vue.config.js and build.prerender.js, specify the settings for proxy: target: "your domain (where the contents of the server folder are located).
In components/page/Article.vue and components/page/cabinet/UpdateAticle.vue, the paths to img are "for prodaction".
Place the contents of the dist and prerendered folder in the root of the server folder.
take dist and prerendered from the repository or run npm run render, having previously deleted prerendered.

## Content update and pre-rendering
After updating the content, you need to run npm run render, having previously deleted prerendered and updated the prerendered folder on the server.

## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```
### Compiles and minifies for production + prerendering
```
npm run render
```

### Lints and fixes files
```
npm run lint
``` 

