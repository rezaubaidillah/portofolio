import "./bootstrap";
import "flowbite";
import Alpine from 'alpinejs';

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCCg2TJYeo0Rzqyiv37OA-BuevI0ZcpbVE",
  authDomain: "my-porto-47558.firebaseapp.com",
  projectId: "my-porto-47558",
  storageBucket: "my-porto-47558.appspot.com",
  messagingSenderId: "940181511339",
  appId: "1:940181511339:web:6a33323d8dfbe0ae89abee",
  measurementId: "G-CZ0KWSTWMH"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

Alpine.start();


var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});


// Assuming you have a button with class 'edit-btn' for each certification
document.querySelectorAll('.edit-btn').forEach(button => {
    button.addEventListener('click', function() {
        const certificationId = this.dataset.id;

        fetch(`/certifications/${certificationId}`)
            .then(response => response.json())
            .then(data => {
                // Pre-fill the form with the fetched data
                document.getElementById('update-id').value = data.id;
                document.getElementById('update-title').value = data.title;
                document.getElementById('update-organization').value = data.organization;
                document.getElementById('update-credential_id').value = data.credential_id;
                document.getElementById('update-credential_url').value = data.credential_url;
                document.getElementById('update-date').value = data.date;

                // Show the modal
                document.getElementById('updateProductModal').classList.remove('hidden');
            })
            .catch(error => {
                console.error('Error fetching certification:', error);
                alert('An error occurred while fetching the certification details. Please try again.');
            });
    });
});

