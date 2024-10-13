# PHP Docker Compose 開發環境

這個專案提供了一個使用 Docker Compose 的 PHP 開發環境，包含 Nginx、PHP-FPM、MySQL 和 phpMyAdmin。

## 目錄結構

- `docker compose.yml`：Docker Compose 配置文件。
- `Dockerfile`：PHP-FPM 的 Dockerfile。
- `html/`：存放 PHP 應用程式的目錄。
- `nginx/`：Nginx 配置文件目錄。

## 環境需求

- Docker
- Docker Compose

## 安裝步驟

1. **克隆此專案**

   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```

2. **啟動 Docker Compose**

   在專案目錄中執行以下命令來啟動所有服務：

   ```bash
   docker compose up -d
   ```

3. **檢查服務狀態**

   使用以下命令檢查所有容器的狀態：

   ```bash
   docker compose ps
   ```

4. **訪問服務**

   - 訪問 Web 應用：http://localhost
   - 訪問 phpMyAdmin：http://localhost:8080

## 常用指令

- 啟動服務：`docker compose up -d`
- 停止服務：`docker compose down`
- 重建映像檔並啟動：`docker compose up -d --build`
- 查看服務狀態：`docker compose ps`
- 查看服務日誌：`docker compose logs`

## 確認環境正常

- 確認 PHP 環境：http://localhost
- 確認 phpMyAdmin：http://localhost:8080
- 使用 MySQL 客戶端連接資料庫

## 貢獻

歡迎任何形式的貢獻，請提交 Pull Request 或 Issue。

## 授權

此專案採用 MIT 授權條款。