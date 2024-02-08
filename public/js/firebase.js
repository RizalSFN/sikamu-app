// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For   Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCYxCb5YOPFWTdi-Mwlf7H9lykbJ83ohu4",
    authDomain: "sikamu-82ea7.firebaseapp.com",
    projectId: "sikamu-82ea7",
    storageBucket: "sikamu-82ea7.appspot.com",
    messagingSenderId: "958132377258",
    appId: "1:958132377258:web:14d0c9a247313b978be2d3",
    measurementId: "G-KBDHKGSGHV",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
