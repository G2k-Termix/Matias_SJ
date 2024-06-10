function calculateWattage() {
    const cpuPower = parseInt(document.getElementById('cpu-power').value);
    const gpuPower = parseInt(document.getElementById('gpu-power').value);
    const motherboardPower = parseInt(document.getElementById('motherboard-power').value);
    const ramPower = parseInt(document.getElementById('ram-power').value);
    const storagePower = parseInt(document.getElementById('storage-power').value);
    const psuEfficiency = parseInt(document.getElementById('psu-efficiency').value) / 100;

    const totalPower = (cpuPower + gpuPower + motherboardPower + ramPower + storagePower) / psuEfficiency;

    const totalWattageElement = document.getElementById('total-wattage');
    totalWattageElement.innerHTML = `Celková wattáž: ${totalPower}W`;
  }