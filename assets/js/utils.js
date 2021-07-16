// Modal listeners

// Employee modal listener
$(".employeeDelete").on("click", (e) => {
  $(".employeeModalTitle").text("Employee " + e.target.id);
  $("#employeeDeleteModalBtn").attr(
    "href",
    "?controller=employees&action=deleteEmployeeByIdController&id=" + e.target.id
  );
});

// Travel modal listener
$(".travelDelete").on("click", (e) => {
  $(".travelModalTitle").text("Travel " + e.target.id);
  $("#travelDeleteModalBtn").attr(
    "href",
    "?controller=travels&action=deleteTravelByIdController&id=" + e.target.id
  );
});
