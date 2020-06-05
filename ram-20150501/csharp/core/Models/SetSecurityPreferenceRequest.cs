// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class SetSecurityPreferenceRequest : TeaModel {
        [NameInMap("EnableSaveMFATicket")]
        [Validation(Required=false)]
        public bool? EnableSaveMFATicket { get; set; }

        [NameInMap("AllowUserToChangePassword")]
        [Validation(Required=false)]
        public bool? AllowUserToChangePassword { get; set; }

        [NameInMap("AllowUserToManageAccessKeys")]
        [Validation(Required=false)]
        public bool? AllowUserToManageAccessKeys { get; set; }

        [NameInMap("AllowUserToManagePublicKeys")]
        [Validation(Required=false)]
        public bool? AllowUserToManagePublicKeys { get; set; }

        [NameInMap("AllowUserToManageMFADevices")]
        [Validation(Required=false)]
        public bool? AllowUserToManageMFADevices { get; set; }

        [NameInMap("LoginSessionDuration")]
        [Validation(Required=false)]
        public int? LoginSessionDuration { get; set; }

        [NameInMap("LoginNetworkMasks")]
        [Validation(Required=false)]
        public string LoginNetworkMasks { get; set; }

    }

}
