const express = require('express');
const app = express();
const stripe = require('stripe')("");

stripe.charges.create({
  amount: 2000,
  currency: "usd",
  source: "tok_amex", // obtained with Stripe.js
  metadata: {'order_id': '6735'}
});

app.get('/', function (req, res) {
  res.send('Hello World!');
});

app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
})
