const comments_btn = document.querySelector("#comments-btn");
const comments_list = document.querySelector("#comments-list");

comments_btn.addEventListener("click", () => {
  if (comments_btn.innerHTML === "Hide comments") {
    comments_list.style.display = "none";
    comments_btn.innerHTML = "Show comments";
  } else {
    comments_list.style.display = "block";
    comments_btn.innerHTML = "Hide comments";
  }
});
