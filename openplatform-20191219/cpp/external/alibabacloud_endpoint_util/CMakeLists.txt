find_package(alibabacloud_endpoint_util QUIET)

if(alibabacloud_endpoint_util_FOUND)
  message(STATUS "Found alibabacloud_endpoint_util version ${alibabacloud_endpoint_util_VERSION}")
else()
  message(STATUS "alibabacloud_endpoint_util could not be located, Building alibabacloud_endpoint_util instead.")
  include(FetchContent)

  FetchContent_Declare(
    _alibabacloud_endpoint_util
    GIT_REPOSITORY https://github.com/alibabacloud-sdk-cpp/endpoint-util.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_alibabacloud_endpoint_util)
  if(NOT _alibabacloud_endpoint_util_POPULATED)
    FetchContent_Populate(_alibabacloud_endpoint_util)
    message(STATUS "Added alibabacloud_endpoint_util source : ${_alibabacloud_endpoint_util_SOURCE_DIR}")
    message(STATUS "Added alibabacloud_endpoint_util binary : ${_alibabacloud_endpoint_util_BINARY_DIR}")
    add_subdirectory(
      ${_alibabacloud_endpoint_util_SOURCE_DIR}
      ${_alibabacloud_endpoint_util_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_alibabacloud_endpoint_util_SOURCE_DIR}/include")
endif()
