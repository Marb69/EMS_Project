export const Employee = () => {
  const Search = document.querySelector("#searchInput");
  const Dept = document.querySelector("#deptFilter");
  const Status = document.querySelector("#statusFilter");
  const pill = document.querySelectorAll(".pill");
  var rows = document.querySelectorAll("#empBody tr");

  Search.addEventListener("input", () => {
    filterTable();
  });

  const onchange = [Dept, Status];

  onchange.forEach((oh) => {
    oh.addEventListener("change", () => {
      filterTable();
    });
  });

  function filterTable() {
    var search = Search.value.toLowerCase();
    var dept = Dept.value;
    var status = Status.value;

    var count = 0;

    rows.forEach(function (row) {
      var match =
        row.textContent.toLowerCase().includes(search) &&
        (dept === "" || row.dataset.dept === dept) &&
        (status === "" || row.dataset.status === status);
      row.style.display = match ? "" : "none";
      if (match) count++;
    });

    document.getElementById("emptyState").style.display =
      count === 0 ? "block" : "none";
  }

};
