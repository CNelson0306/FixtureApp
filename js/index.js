
document.addEventListener("DOMContentLoaded", () => {
    console.log("JS Loaded");

    fetch("get_info.php")
        .then(response => response.json())  // Directly parse the JSON
        .then(data => {
            if(Array.isArray(data) && data.length > 0) {
                console.log("Updating HTML....");

                // Loop through the database and update the correct id
                data.forEach((game, index) => {
                    let rowNum = index + 1; //IDS start from 1
                    let resultElem = document.getElementById(`result${rowNum}`);
                    let scoreElem = document.getElementById(`score${rowNum}`);
                    let motmElem = document.getElementById(`motm${rowNum}`);

                    if (resultElem && scoreElem && motmElem) {
                        resultElem.value = game.result;
                        scoreElem.value = game.score;
                        motmElem.value = game.motm;
                    }
                });

                console.log("HTML Updated");
            } else {
                console.error("Unexpected data format or empty data:", data);
            }
        })
        .catch(error => console.error("Error fetching data", error));
    });

