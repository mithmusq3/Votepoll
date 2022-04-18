const express = require('express');
const app= express()

const users = []

app.set('view-engine','ejs')

app.get('/',(req,res)=>{
    res.render('index.ejs',{ name:'Mithu'})
})
 
app.get('/login',(req,res)=>{
    res.render('login.ejs')
})
 
app.post ('/login',(req,res)=>{
  res.body.name
})

app.get('/register',(req,res)=>{
    res.render('register.ejs')
})
 
app.post ('/register',(req,res)=>{
    res.body.name
})

app.listen(3000) 