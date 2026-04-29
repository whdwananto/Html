let population = 1;
for (let day = 1; day <= 49; day++) {
  if (day % 3 === 0) {
    population = Math.floor(population / 2);
  } else {
    population = population * 3;
  }
  document.write("Jumlah Penduduk hari ke- "+day);
}
