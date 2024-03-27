// server.js

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const PORT = 3000;

// Dummy data for flights, trains, and hotels
let flights = [
    { id: 1, name: 'Flight 1', price: 100 },
    { id: 2, name: 'Flight 2', price: 150 },
    // Add more flight data here
];

let trains = [
    { id: 1, name: 'Train 1', price: 50 },
    { id: 2, name: 'Train 2', price: 80 },
    // Add more train data here
];

let hotels = [
    { id: 1, name: 'Hotel 1', price: 200 },
    { id: 2, name: 'Hotel 2', price: 250 },
    // Add more hotel data here
];

app.use(bodyParser.json());

// Endpoint to get available flights
app.get('/flights', (req, res) => {
    res.json(flights);
});

// Endpoint to book a flight
app.post('/book-flight', (req, res) => {
    const { id } = req.body;
    // Logic to book the flight with the given ID
    // You can implement this logic based on your requirements
    res.send('Flight booked successfully');
});

// Similarly, implement endpoints for trains and hotels

app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
