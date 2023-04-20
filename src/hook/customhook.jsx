import axios from "axios";
import { useContext } from "react";
import { page } from "../context/page";

const useRequest = () => {
  return axios.create({
    baseURL: import.meta.env.VITE_rootURL,
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    }
  });
};

const usePosition = () => useContext(page);

export {useRequest, usePosition};