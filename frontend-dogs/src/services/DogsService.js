export async function getDogs (url) {
  try {
    const response = await fetch(url)
    if (!response.ok) {
      return []
    } else {
      const data = await response.json()
      return data
    }
  } catch (error) {
    return []
  }
}
