
window.addEventListener('load', () => {
  let long;
  let lat;
  let temperatureDeegree = document.querySelector('.temperauter-degree');
  let temperatureDescription = document.querySelector('.temperature-description');
  let locationTimeZone = document.querySelector('.location-timezone');
  let tempreratureSection = document.querySelector('.temperature');
  const temperatureSpan = document.querySelector('.temperature span');

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {
      long = position.coords.longitude;
      lat = position.coords.latitude;

      const proxy = "https://cors-anywhere.herokuapp.com/";
      const api = `${proxy}https://api.darksky.net/forecast/13f54ac665fa61b6cf809d0cb273aa8a/${lat},${long}`;

      fetch(api)
        .then(Response => {
          return Response.json();
        })
        .then(data => {
          const { temperature, summary, icon } = data.currently;
          // set DOM elements from  the API

          temperatureDeegree.textContent = temperature;
          temperatureDescription.textContent = summary;
          locationTimeZone.textContent = data.timezone;

          // formola for the Celsius
          let celsius = (temperature - 32) * (5 / 9);

          // set icon 
          setIcons(icon, document.querySelector('.icon'));

          // change temperature to Celsius/farenheit
          tempreratureSection.addEventListener('click', () => {
            if (temperatureSpan.textContent === "F") {
              temperatureSpan.textContent = "C";

              temperatureDeegree.textContent = Math.floor(celsius);
            } else {
              temperatureSpan.textContent = "F"
              temperatureDeegree.textContent = temperature;
            }
          })
        });
    });
  }

  function setIcons(icon, iconID) {
    const skycons = new Skycons({ color: "white" });
    const currentIcon = icon.replace(/-/g, "_").toUpperCase();
    skycons.play();
    return skycons.set(iconID, skycons[currentIcon]);
  }
});

