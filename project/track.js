const form = document.querySelector("form");
const tbodyEl = document.querySelector("table");
function onAddWebsite(e) {
    e.preventDefault();
    const transaction = document.getElementById("transaction").value;
    const description = document.getElementById("discribe").value;
    const money = document.getElementById("money").value;
    const time = document.getElementById("time").value;
    tbodyEl.innerHTML += `
    <tr>
    <td>${transaction}</td>
    <td>${description}</td>
    <td>${money}</td>
    <td>${time}</td>
    </tr>
    `;
    
    
    
    
    
    alert("this is the date:" + time);
}
form.addEventListener("submit",onAddWebsite);
