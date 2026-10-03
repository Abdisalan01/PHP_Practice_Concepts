# Assignment 1 — Code Explanation

Each picture shows the **code** (top) and the **result in the browser** (bottom).
All files have the same simple shape: a small HTML page, a `<h2>` title, and the PHP code between `<?php` and `?>`.

---

## Activity 1 — Largest and smallest number

![activity 1](activity%201%20-%20largest%20and%20smallest.png)

- We have three numbers: `$x = 12`, `$y = 5`, `$z = 9`.
- **Largest:** if `$x` is bigger than or equal to **both** others (`&&`), then `$x` is the max. If not, we check `$y`. If not, it must be `$z`.
- **Smallest:** the same idea, but with `<=`.
- Result: largest **12**, smallest **5**.

---

## Activity 2 — Divisible by 3 and 5

![activity 2](activity%202%20-%20divisible%20by%203%20and%205.png)

- `$num % 3 == 0` means the remainder is 0, so `$num` is divisible by 3.
- We check **both first** (`&&`). If we checked "3" first, we would never reach the "both" message.
- Then we check 3 only, then 5 only, and `else` is for "none".
- 15 ÷ 3 = 5 and 15 ÷ 5 = 3 → **divisible by 3 and 5**.

---

## Activity 3 — Odd and even numbers

![activity 3](activity%203%20-%20odd%20and%20even%20numbers.png)

- **Odd numbers (2 to 20):** a `while` loop starts at `$i = 2` and goes up with `$i++`. `$i % 2 == 1` means odd, so we print it.
- **Even numbers (35 to 7):** a second `while` loop starts at 35 and goes **down** with `$i--`. `$i % 2 == 0` means even.
- Don't forget `$i++` / `$i--` — without it the loop never ends.

---

## Activity 4 — Divisible by 2 and 5

![activity 4](activity%204%20-%20divisible%20by%202%20and%205.png)

- A `for` loop counts **down** from 50 to 2: `for ($n = 50; $n >= 2; $n--)`.
- We print `$n` only when it is divisible by 2 **and** by 5.
- Result: **50 40 30 20 10**.

---

## Activity 5 — Reverse a number

![activity 5](activity%205%20-%20reverse%20a%20number.png)

- `$copy % 10` takes the **last digit** (12345 → 5).
- `$rev * 10 + $last` moves the old digits left and adds the new digit at the end.
- `floor($copy / 10)` **removes** the last digit (12345 → 1234).
- We work on `$copy`, so `$num` keeps the first value for printing.

| Round | `$copy` | `$last` | `$rev` |
|---|---|---|---|
| 1 | 12345 | 5 | 5 |
| 2 | 1234 | 4 | 54 |
| 3 | 123 | 3 | 543 |
| 4 | 12 | 2 | 5432 |
| 5 | 1 | 1 | 54321 |

---

## Activity 6 — LCM

![activity 6](activity%206%20-%20lcm.png)

- The LCM can't be smaller than the bigger number, so we **start from the bigger one** (12).
- The `while` loop adds 1 while `$lcm` is **not** divisible by `$a` **or** not divisible by `$b`.
- 12 → no (12 % 8 = 4) … 24 → yes. **LCM = 24**.

---

## Activity 7 — HCF

![activity 7](activity%207%20-%20hcf.png)

- The `for` loop tries every number from 1 up to the smaller number.
- If `$i` divides **both** numbers, we save it in `$hcf`.
- The last saved number is the biggest one → **HCF = 6**.

---

## Activity 8 — Multiplication table

![activity 8](activity%208%20-%20multiplication%20table.png)

- We print an HTML `<table>` with `border='1'`.
- **First row:** one `for` loop prints the column numbers 1 to 12 as `<th>`.
- **Other rows:** the outer loop (`$row`) makes 12 rows. The inner loop (`$col`) makes 12 cells with `$row * $col`.
- The first cell of each row is the row number in `<th>`.

---

## Activity 9 — Prime or not prime

![activity 9](activity%209%20-%20prime%20or%20not.png)

- `$count` counts how many numbers divide `$num`.
- The loop checks every number from 1 to `$num`.
- A prime number has **exactly 2** divisors (1 and itself). 29 has only 1 and 29 → `$count == 2` → **prime**.

---

## Activity 10 — Prime numbers from 10 to 50

![activity 10](activity%2010%20-%20prime%20numbers%2010%20to%2050.png)

- The **outer** loop goes through every number from 10 to 50.
- For each number, `$count` starts again at 0.
- The **inner** loop counts the divisors (same idea as Activity 9).
- If `$count == 2`, the number is prime and we print it.
- Result: **11 13 17 19 23 29 31 37 41 43 47**.
