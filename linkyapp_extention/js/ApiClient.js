import {domain} from "../appConfig.js";
class ApiClient {
    static createResultObject(success, data, message) {
        return { success, data, message };
    }

    static handleApiResponse(jsonResponse, code) {
        if (jsonResponse.status === "success") {
            return this.createResultObject(true, jsonResponse.data);
        }

        if(code === 401){
            this.handleSessionExpired();
        }

        const errorMessage = jsonResponse.message || 'Oops! Something went wrong';
        console.error(`API ${jsonResponse.status}:`, jsonResponse.message, jsonResponse.data);
        return this.createResultObject(false, jsonResponse.data, errorMessage);
    }

    static handleSessionExpired(){
        chrome.tabs.create({ url: domain + "/login" });
    }

    static async fetchData(url, options = {}) {
        try {
            const response = await fetch(url, options);
            const jsonResponse = await response.json();
            return this.handleApiResponse(jsonResponse, response.status);
        } catch (error) {
            const result = this.createResultObject(false, null, 'Oops! Something went wrong');
            console.error('API error:', error.message);
            return result;
        }
    }

    static async fetchFile(url, options = {}) {
        options.mode = "same-origin";

        try {
            const response = await fetch(url, options);
            if (response.ok)
                return this.createResultObject(true, await response.blob());
            
            return this.createResultObject(false, null, response.message)
            
        } catch (error) {
            const result = this.createResultObject(false, null, 'Oops! Something went wrong');
            console.error('API error:', error.message);
            return result;
        }
    }
}

export default ApiClient;
