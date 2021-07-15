// Modal listeners

// Employee modal listener
$(".employeeDelete").on("click", (e) => {
  $("#employeeDeleteModalBtn").attr(
    "href",
    "?controller=employees&action=deleteEmployeeById&id=" + e.target.id
  );
});

// Travel modal listener
$(".travelDelete").on("click", (e) => {
  $("#travelDeleteModalBtn").attr(
    "href",
    "?controller=travels&action=deleteTravelById&id=" + e.target.id
  );
});
