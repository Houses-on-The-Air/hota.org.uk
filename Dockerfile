# Stage 1: Build
FROM node:18-alpine AS build

WORKDIR /usr/src/hota

COPY package*.json ./
RUN npm install

COPY . .

# Stage 2: Production
FROM php:8.4.4-zts-alpine3.21

WORKDIR /usr/src/hota

# Copy only necessary files from the build stage
COPY --from=build /usr/src/hota /usr/src/hota

# Ensure the hota user exists and set appropriate permissions
RUN adduser -D -u 1000 hota && chown -R hota:hota /usr/src/hota

USER hota

# Use a more secure health check
HEALTHCHECK --interval=30s --timeout=10s --start-period=5s --retries=3 CMD curl --fail http://localhost:80 || exit 1

EXPOSE 80
EXPOSE 443

CMD [ "php", "./index.php" ]
