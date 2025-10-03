# 🛠️ Development Plan (Based on Updated Schema)

## 📅 Timeline: 4 Weeks (1 Month)

---

## Week 1: Setup & Foundations
- **Environment Setup**
  - Install & configure XAMPP (Apache + MySQL).
  - Set up Laravel backend (API-first approach).
  - Set up React frontend with Vite/Tailwind.
  - Connect Laravel with MySQL via `.env`.
  - Install Postman for API testing.

- **Database Setup**
  - Create database schema in MySQL:
    - `users`, `membership_plans`, `flexible_access`,  
      `user_memberships`, `payments`, `walk_in_payments`, `analytics`.
  - Run migrations & test connections.

- **Authentication**
  - Laravel Breeze or Sanctum for user authentication (admins, staff, members).
  - Roles-based access (`admin`, `staff`, `member`).
  - Test login/signup APIs in Postman.

---

## Week 2: Membership & Flexible Access Modules
- **Membership Plans**
  - Admin CRUD for `membership_plans`.
  - Display available plans in React.
  - API endpoints: `GET /plans`, `POST /plans`, etc.

- **Flexible Access (Walk-In Passes)**
  - Admin CRUD for `flexible_access`.
  - Create simple React component for showing available passes.
  - API endpoints for walk-in purchases → record in `walk_in_payments`.

- **User Memberships**
  - Allow members to purchase plans → record in `user_memberships`.
  - Automatically calculate `start_date` and `end_date`.
  - Test plan activation via Postman.

---

## Week 3: Payments & Analytics
- **Payments**
  - Implement payment recording for:
    - Membership purchases (`payments` linked to `user_memberships`).
    - Walk-in payments (`walk_in_payments` linked to `flexible_access`).
  - Support payment methods: `cash`, `gcash`, `card`.

- **Analytics**
  - Aggregate data daily:
    - Active members
    - Walk-in passes sold
    - Revenue
    - Demographics (via `users` age groups)
  - Create API endpoint: `GET /analytics`.

- **React Dashboards**
  - Admin Dashboard:
    - Membership stats
    - Walk-in stats
    - Revenue charts
  - Staff Dashboard:
    - Quick walk-in payment entry
    - Search for members
    - Membership status checks

---

## Week 4: Chatbot, Testing & Finalization
- **Chatbot Integration**
  - Implement a simple chatbot using a prebuilt library (Dialogflow / Rasa / custom FAQ).
  - Functions:
    - Answer FAQs (plans, prices, opening hours).
    - Help members check their membership status.
    - Assist walk-ins with pass pricing.

- **Testing**
  - API Testing in Postman:
    - All CRUD routes.
    - Payment flows (membership + walk-in).
    - Analytics reporting endpoints.
  - Frontend Testing:
    - User registration/login.
    - Purchasing memberships.
    - Walk-in pass entry.

- **Deployment**
  - Deploy Laravel backend in XAMPP.
  - Serve React build with Apache/Nginx.
  - Finalize documentation (README + ERD diagram).
  - Hand-over with user manual for staff/admins.

---

# ✅ Deliverables
1. **Working Web System**:
   - User & membership management
   - Walk-in payment handling
   - Payments tracking
   - Analytics dashboard
   - Chatbot assistant
  
2. **Testing Proof**:
   - Postman collection of tested endpoints
   - Example data in MySQL

3. **Documentation**:
   - README file
   - ERD diagram
   - API docs
