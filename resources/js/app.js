import './bootstrap'; //non è la libreria Bootstrap CSS

import '~resources/scss/app.scss'

import * as bootstrap from 'bootstrap'

import.meta.glob([
    '../img/**'
])

const form=document.getElementById("delete");

form.addEventListener("submit",(event)=>{

    console.log("ciaociao" + event)
})