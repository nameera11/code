import React from 'react';
import './HeroSection.css';// import the CSS file
import logo from './logo.svg';
export default function HeroSection() {
    return (
        <section className="hero">
            <img
            src={logo}
            alt="Hero"
            className="hero-image"
            />
            <h1 className="hero-heading">Welcome to MySite</h1>
            <button className="hero-button">Get Started</button>
        </section>
    )
}
