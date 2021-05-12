//import { createSlice } from "@reduxjs/toolkit";
//import { api } from "../config/api";
/*const initialState = {
    user: null,
    isLoggedIn: false,
}
const userSlice = createSlice({
    name: 'user',
    initialState: initialState,
    reducers: {
    loginSuccess: (state, action) => {
        state.isLoggedIn = true;
    },
    logoutSuccess: (state, action) => {
        state.isLoggedIn = false;
        state.user = null;
    },
    userLoaded: (state, action) => {
        state.user = action.payload;
    },
},
});
export default userSlice.reducer;

const {loginSuccess,logoutSuccess,userLoaded }= userSlice.actions;

export const loginRequest =({username, password}) => async(dispatch)=>{
try{
    const response = await api.post("/api/user",{username,password});
    dispatch(loginSuccess(response.data.access_token));
    return response.data;
}catch (e) {
    throw e;
}
}
export const logout =() => async(dispatch)=>{

}
export const getUser =() => async(dispatch)=>{
    try{
        const response = await api.get("/api/user");
        dispatch(userLoaded(response.data));
        return response.data;
    }catch (e) {
        throw e;
    }
}
*/
