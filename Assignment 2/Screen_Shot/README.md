# Assignment 2 — Code Explanation

Each picture shows the **code** (top) and the **result in the browser** (bottom).

---

## Activity 1 — One-dimensional array

![activity 1](activity%201%20-%20one%20dimensional%20array.png)

**Step 1 — the array**
- `$nums = array(5, -7, 12, ...)` makes an indexed array of 12 numbers.
- `$size = count($nums);` saves the number of elements (12).

**Step 2 — the totals (one `for` loop)**
- `$sum = $sum + $nums[$i];` adds every element.
- `$nums[$i] % 2 == 0` → even → add to `$evenSum`. Otherwise (`else`) → odd → add to `$oddSum`.
- Note: for negative odd numbers PHP gives `-7 % 2 = -1`, not 1. That's why we test `== 0` for even and use `else` for odd.

**Step 3 — minimum and maximum**
- `min($nums)` → **-7**, `max($nums)` → **12**.

**Step 4 — positions**
- A `for` loop checks every element. If it equals `$min`, we print `$i + 1`.
- We add 1 because the **index starts at 0**, but the **position starts at 1**.
- -7 is at positions **2, 5, 10**. 12 is at positions **3, 8**.

---

## Activity 2 — Color array

![activity 2](activity%202%20-%20color%20array.png)

- `$colors` is a **two-dimensional associative array**:
  - Outer keys: `"Light"`, `"Normal"`, `"Dark"` (the rows).
  - Inner keys: `"Red"`, `"Green"`, `"Blue"` (the columns).
- We `echo` an HTML table with `border='1'`.
- **Header row:** an empty cell, then Red, Green, Blue.
- **Outer `foreach`:** `$shade` is the key (Light…), `$row` is the inner array. `$shade` goes in a `<th>`.
- **Inner `foreach`:** prints each color (e.g. `Light Red`) in a `<td>`.

---

## Activity 3 — Student information

![activity 3](activity%203%20-%20student%20information.png)

- `$students` is an **indexed array** of 3 students. Each student is an **associative array** with the keys `ID`, `Name`, `Phone`, `Address`.
- The header row prints the four column names.
- `foreach ($students as $s)` — on each round `$s` is one student.
- `$s["Name"]` reads one value by its key and puts it in a `<td>`.
- The dot `.` joins the HTML tags with the value: `"<td>" . $s["Name"] . "</td>"`.
