import { Database } from '@cloudflare/d1';

export interface Env {
    DB: Database;
}

export default {
    async fetch(request: Request, env: Env) {
        const { pathname } = new URL(request.url);

        if (pathname === "/api/clients") {
            // Query the database or perform any other operations here
            const clients = await fetchClientsFromDatabase(env.DB);

            // Create a response with the fetched clients
            const response = new Response(JSON.stringify(clients), {
                headers: {
                    "Content-Type": "application/json",
                    // Allow requests from any origin (you can change this if needed)
                    "Access-Control-Allow-Origin": "*"
                }
            });

            return response;
        }

        // Handle other routes or requests here
        return new Response("Not Found", { status: 404 });
    },
};

async function fetchClientsFromDatabase(db: Database) {
    // Implement your logic to fetch clients from the database here
    // For example:
    const queryResult = await db.query("SELECT * FROM clients");
    return queryResult.rows;
}
