document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        let totalWattage = 0;
        document.querySelectorAll('input[type="checkbox"]:checked').forEach(checked => {
            totalWattage += parseInt(checked.dataset.wattage);
        });
        document.getElementById('result').innerText = 'Total Wattage: ' + totalWattage + 'W';
    });
});