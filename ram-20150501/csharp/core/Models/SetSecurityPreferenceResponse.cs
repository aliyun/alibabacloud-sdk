// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class SetSecurityPreferenceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecurityPreference")]
        [Validation(Required=true)]
        public SetSecurityPreferenceResponseSecurityPreference SecurityPreference { get; set; }
        public class SetSecurityPreferenceResponseSecurityPreference : TeaModel {
            [NameInMap("LoginProfilePreference")]
            [Validation(Required=true)]
            public SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference LoginProfilePreference { get; set; }
            public class SetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference : TeaModel {
                [NameInMap("EnableSaveMFATicket")]
                [Validation(Required=true)]
                public bool? EnableSaveMFATicket { get; set; }

                [NameInMap("AllowUserToChangePassword")]
                [Validation(Required=true)]
                public bool? AllowUserToChangePassword { get; set; }

                [NameInMap("LoginSessionDuration")]
                [Validation(Required=true)]
                public int? LoginSessionDuration { get; set; }

                [NameInMap("LoginNetworkMasks")]
                [Validation(Required=true)]
                public string LoginNetworkMasks { get; set; }

            }
            [NameInMap("AccessKeyPreference")]
            [Validation(Required=true)]
            public SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference AccessKeyPreference { get; set; }
            public class SetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference : TeaModel {
                [NameInMap("AllowUserToManageAccessKeys")]
                [Validation(Required=true)]
                public bool? AllowUserToManageAccessKeys { get; set; }

            }
            [NameInMap("PublicKeyPreference")]
            [Validation(Required=true)]
            public SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference PublicKeyPreference { get; set; }
            public class SetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference : TeaModel {
                [NameInMap("AllowUserToManagePublicKeys")]
                [Validation(Required=true)]
                public bool? AllowUserToManagePublicKeys { get; set; }

            }
            [NameInMap("MFAPreference")]
            [Validation(Required=true)]
            public SetSecurityPreferenceResponseSecurityPreferenceMFAPreference MFAPreference { get; set; }
            public class SetSecurityPreferenceResponseSecurityPreferenceMFAPreference : TeaModel {
                [NameInMap("AllowUserToManageMFADevices")]
                [Validation(Required=true)]
                public bool? AllowUserToManageMFADevices { get; set; }

            }
        };

    }

}
