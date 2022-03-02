<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;70
    0&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/cssf.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Cookie&display=swap" rel="stylesheet">
    <title>The Chezzy Slice</title>
    <style>
        html {
            max-width: 100%;
            margin: 0px;
            overflow-x: hidden;
        }

        .logo-image {
            height: 60px;
        }

        @media only screen and (max-width: 600px) {
            .logo-image {
                height: 45px;
            }
        }

        /* Contact Form */
        .contain {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto;
            padding: 1em;
        }

        .contact-wrapper {
            margin: 20px 0;
        }

        .submit-btn {
            float: left;
        }

        .reset-btn {
            float: right;
        }

        .form-headline:after {
            content: "";
            display: block;
            width: 10%;
            padding-top: 10px;
            border-bottom: 3px solid #ec1c24;
        }

        .highlight-text {
            color: #ec1c24;
        }

        .hightlight-contact-info {
            font-weight: 700;
            font-size: 22px;
            line-height: 1.5;
        }

        .highlight-text-grey {
            font-weight: 500;
        }

        .email-info {
            margin-top: 20px;
        }

        ::-webkit-input-placeholder {
            /* Chrome */
            font-family: 'Roboto', sans-serif;
        }

        .required-input {
            color: black;
        }

        @media (min-width: 600px) {
            .contain {
                padding: 0;
            }
        }

        h3,
        ul {
            margin: 0;
        }

        h3 {
            margin-bottom: 1rem;
        }

        .form-input:focus,
        textarea:focus {
            outline: 1.5px solid #ec1c24;
        }

        .form-input,
        textarea {
            width: 100%;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
        }

        .wrapper>* {
            padding: 1em;
        }

        @media (min-width: 700px) {
            .wrapper {
                display: grid;
                grid-template-columns: 2fr 1fr;
            }

            .wrapper>* {
                padding: 2em 1em;
            }
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .contacts {
            color: #212d31;
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        form label {
            display: block;
        }

        form p {
            margin: 0;
        }

        .full-width {
            grid-column: 1 / 3;
        }

        button,
        .submit-btn,
        .form-input,
        textarea {
            padding: 1em;
        }

        button,
        .submit-btn {
            background: transparent;
            border: 1px solid #ec1c24;
            color: #ec1c24;
            border-radius: 15px;
            padding: 5px 20px;
            text-transform: uppercase;
        }

        button:hover,
        .submit-btn:hover,
        button:focus,
        .submit-btn:focus {
            background: #ec1c24;
            outline: 0;
            color: #eee;
        }

        .error {
            color: #ec1c24;
        }
    </style>
</head>

<body>