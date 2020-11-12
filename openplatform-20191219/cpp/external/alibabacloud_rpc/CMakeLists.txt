find_package(alibabacloud_rpc QUIET)

if(alibabacloud_rpc_FOUND)
  message(STATUS "Found alibabacloud_rpc version ${alibabacloud_rpc_VERSION}")
else()
  message(STATUS "alibabacloud_rpc could not be located, Building alibabacloud_rpc instead.")
  include(FetchContent)

  FetchContent_Declare(
    _alibabacloud_rpc
    GIT_REPOSITORY https://github.com/alibabacloud-sdk-cpp/rpc.git
    GIT_TAG master
    CMAKE_ARGS
      -DENABLE_UNIT_TESTS:BOOL="0")

  FetchContent_GetProperties(_alibabacloud_rpc)
  if(NOT _alibabacloud_rpc_POPULATED)
    FetchContent_Populate(_alibabacloud_rpc)
    message(STATUS "Added alibabacloud_rpc source : ${_alibabacloud_rpc_SOURCE_DIR}")
    message(STATUS "Added alibabacloud_rpc binary : ${_alibabacloud_rpc_BINARY_DIR}")
    add_subdirectory(
      ${_alibabacloud_rpc_SOURCE_DIR}
      ${_alibabacloud_rpc_BINARY_DIR}
    )
  endif()
  target_include_directories(alibabacloud_open_platform_20191219 PRIVATE "${_alibabacloud_rpc_SOURCE_DIR}/include")
endif()
