# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Vihasith Rasala

**Email**: rasalavh@mail.uc.edu

![Vihasith Rasala](images/headshot.png)


## Individual Project 1 – Front-end Web Development with a Professional Profile Website on github.io cloud service

**Overview**: This project involves creating a professional profile website for front-end web development using GitHub Pages. The personal portfolio has been developed and deployed on GitHub's cloud service.

To meet technical requirements, the website incorporates basic JavaScript, JQuery, and the React library. Additionally, two public web APIs are integrated to enhance functionality. JavaScript cookies are utilized for remembering users, enabling personalized greetings upon revisiting the website.

For non-technical requirements, an open-source Bootstrap framework is utilized to ensure a responsive and visually appealing design. Moreover, Google Analytics page tracker is integrated to gather insights on website traffic and visitor behavior.

Link to the repository:
[https://github.com/Vihasith137/Vihasith137.github.io/blob/main/README.md](https://github.com/Vihasith137/Vihasith137.github.io/blob/main/README.md)

\pagebreak

To create the personal portfolio i have downloaded a predefined bootstrap template from [https://startbootstrap.com/theme/resume](https://startbootstrap.com/theme/resume) and customized it as per the project requirements. This portifolio consists of professional profile with my resume, including name, headshot, contact information, background, e.g., education, my experiences and skills. Additonally, a link to new HTML page to show case the Hackathons , Labs which are completed as part of WAPH course work has been added.

![portfolio homepage](images/img1.png)

![Link to WAPH course](images/img2.png)


\pagebreak

A live weather update API is added to my portfolio.

```
<div class="weather-widget">
		<a class="weatherwidget-io" href="https://forecast7.com/en/39d10n84d51/cincinnati/" data-label_1="CINCINNATI" data-label_2="WEATHER" data-theme="original" >Weather Forecast</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
		js.src='https://weatherwidget.io/js/widget.min.js';
		fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
```
![Redirected image](images/img3.png)

\pagebreak

The techstack used for this portfolio is HTML, CSS, Bootstrap framwork, and JavaScript.

Moreover some of the code from lab 2
To make the portfolio interesting i have add a custom greeting message using react. This code helps in greeting the user Good Morning , Good evening , Good afternoon based on the time of the day.

```JS
<head>
<script src="https://unpkg.com/react@17/umd/react.development.js"></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
</head>

<div id="greeting-root"></div>
<script src="greetings.js"></script>

const Greeting = () => {
  const hour = new Date().getHours();
  let greetingMessage;

  if (hour >= 5 && hour < 12) {
    greetingMessage = 'Good morning!';
  } else if (hour >= 12 && hour < 17) {
    greetingMessage = 'Good afternoon!';
  } else {
    greetingMessage = 'Good evening!';
  }

  return React.createElement('h2', null, greetingMessage);
};

ReactDOM.render(React.createElement(Greeting, null),
document.getElementById('greeting-root'));
```

\pagebreak

JavaScript cookies are utilized to remember the user . If they visit the website first time "welcome to my portfolio is displayed" otherwise "welcome back to my portfolioi and time" are displayed.

```JS
<script>
<div id="greetingCookie"></div>
function setCookie(name, value, expiryDays) {
            const d = new Date();
            d.setTime(d.getTime() + (expiryDays*24*60*60*1000));
            let expires = "expires="+ d.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        function getCookie(name) {
            let cookieName = name + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for(let i = 0; i <ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(cookieName) == 0) {
                    return c.substring(cookieName.length, c.length);
                }
            }
            return "";
        }

        function welcomeUser() {
            const lastVisit = getCookie("lastVisit");
            const greetingElement = document.getElementById("greetingCookie");
            if (lastVisit) {
                greetingElement.innerHTML =
		 "Welcome back! Your last visit was on " + lastVisit + ".";
            } else {
                greetingElement.innerHTML = "Welcome to my portfolio!";
            }
            const now = new Date();
            setCookie("lastVisit", now.toLocaleString(), 365);
        }

        welcomeUser();
</script>
```

![Utilizing cookies to remember the User](images/6.png)

![Utilizing cookies to show revisiting USer](images/7.png)