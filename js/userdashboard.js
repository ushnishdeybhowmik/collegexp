window.onload = function () {
  var xpval = document.getElementById("xpval");
  var xp = xpval.textContent;
  var rank = document.getElementById("rank");
  var progress = document.getElementById("xp_progress_bar");
  var project_progress = document.getElementsByClassName("progressanim");
  const levels = [
    "Newbie",
    "Apprentice",
    "Adept",
    "Challenger",
    "Masters",
    "Veteran",
    "Mythical",
  ];
  if (xp >= 0 && xp <= 50) {
    rank.innerHTML = levels[0];
    progressAnimation(xp, progress, 50);
  } else if (xp > 50 && xp <= 200) {
    rank.innerHTML = levels[1];
    progressAnimation(xp, progress, 200);
  } else if (xp > 200 && xp <= 500) {
    rank.innerHTML = levels[2];
    progressAnimation(xp, progress, 500);
  } else if (xp > 500 && xp <= 1000) {
    rank.innerHTML = levels[3];
    progressAnimation(xp, progress, 1000);
  } else if (xp > 1000 && xp <= 1350) {
    rank.innerHTML = levels[4];
    progressAnimation(xp, progress, 1350);
  } else if (xp > 1350 && xp <= 1600) {
    rank.innerHTML = levels[5];
    progressAnimation(xp, progress, 1600);
  } else if (xp > 1600 && xp <= 2000) {
    rank.innerHTML = levels[6];
    progressAnimation(xp, progress, 2000);
  }

  for (let i = 0; i < project_progress.length; i++) {
    let w_arr = [90, 20, 60, 40, 10, 65];
    projectProgressAnimation(w_arr[i], project_progress[i]);
  }
};

progressAnimation = function (xp, progress, max) {
  var percentage = Math.round((xp / max) * 100);
  let current_width = 0;
  let anim = setInterval(frame, 5);
  function frame() {
    if (current_width == percentage) {
      clearInterval(anim);
    } else {
      current_width++;
      var str = "";
      progress.style.width = str.concat(current_width, "%");
    }
  }
};

projectProgressAnimation = function (width, progress) {
  let current_width = 0;
  let anim = setInterval(frame2, 5);
  function frame2() {
    if (current_width == width) {
      clearInterval(anim);
    } else {
      current_width++;
      var str = "";
      progress.style["width"] = str.concat(current_width, "%");
    }
  }
};
