
# 🌱 AgroPal

AgroPal is a comprehensive web-based platform designed to assist farmers and agricultural businesses in managing their activities efficiently. It provides features like crop management, weather forecasting, market price updates, and expert consultations to support modern farming practices.

## 📋 Features

- 🌾 Crop management and recommendations
- 📈 Market price tracking for crops and produce
- 🌦️ Weather forecast integration for planning
- 🛒 Marketplace for buying/selling farm products
- 🧑‍🌾 Farmer profile and activity logs
- 💬 Expert consultations and advisory
- 🗂️ Report generation and analytics dashboard

## 🛠️ Technologies Used

- **Backend:** Laravel (PHP Framework)
- **Frontend:** Blade templates, Bootstrap, Vue.js
- **Database:** MySQL
- **Package Management:** Composer, NPM
- **Version Control:** Git
- **Other Tools:** StyleCI, PHPUnit

## 🚀 Installation

### Prerequisites:
- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL Server

### Steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/AgroPal.git
   cd AgroPal
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install Node Dependencies:**
   ```bash
   npm install
   ```

4. **Configure Environment Variables:**
   - Copy `.env.example` to `.env`
   - Update DB credentials and other config in `.env`

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Start Development Server:**
   ```bash
   php artisan serve
   ```

8. **Compile Assets:**
   ```bash
   npm run dev
   ```

## 🖥️ Usage

- Visit `http://127.0.0.1:8000` in your browser after running the development server.
- Login or Register as a user.
- Explore modules like Crop Management, Market Prices, and Weather Forecast.
- Generate reports and manage your farming activities.

## 📄 Documentation

You can find detailed project documentation and reports in the `/Report/` directory:
- Final Report (docx & pdf)
- Presentation Slides (pptx)
- Data Flow Diagrams (png, html)

## 👥 Contributors

- BCA (4th Sem Project)
- Aman Bhandari
- Nischal Adhikari
- Kiran Aryal

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
