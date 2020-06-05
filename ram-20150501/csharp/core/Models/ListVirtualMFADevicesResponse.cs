// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListVirtualMFADevicesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("VirtualMFADevices")]
        [Validation(Required=true)]
        public ListVirtualMFADevicesResponseVirtualMFADevices VirtualMFADevices { get; set; }
        public class ListVirtualMFADevicesResponseVirtualMFADevices : TeaModel {
            [NameInMap("VirtualMFADevice")]
            [Validation(Required=true)]
            public List<ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice> VirtualMFADevice { get; set; }
            public class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADevice : TeaModel {
                    public string SerialNumber { get; set; }
                    public string ActivateDate { get; set; }
                    public ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser User { get; set; }
                    public class ListVirtualMFADevicesResponseVirtualMFADevicesVirtualMFADeviceUser : TeaModel {
                        [NameInMap("UserId")]
                        [Validation(Required=true)]
                        public string UserId { get; set; }

                        [NameInMap("UserName")]
                        [Validation(Required=true)]
                        public string UserName { get; set; }

                        [NameInMap("DisplayName")]
                        [Validation(Required=true)]
                        public string DisplayName { get; set; }

                    }
            }
        };

    }

}
