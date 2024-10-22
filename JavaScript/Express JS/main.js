// EXPRESS JS

const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
  res.send('Hello World!')
})

// Creating other pages
app.get('/about', (req,res) => {
    res.send('This is about page')
})

// Using parameters
app.get('/blog/:slug', (req,res) => {
    res.send(`Hello ${req.params.slug}`)

    // For URL: http://127.0.0.1:3000/blog/new-blog?name=king
    console.log(req.params)
    console.log(req.query)
})


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})