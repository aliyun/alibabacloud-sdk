// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetSecurityPreferenceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecurityPreference")]
        [Validation(Required=true)]
        public GetSecurityPreferenceResponseSecurityPreference SecurityPreference { get; set; }
        public class GetSecurityPreferenceResponseSecurityPreference : TeaModel {
            [NameInMap("LoginProfilePreference")]
            [Validation(Required=true)]
            public GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference LoginProfilePreference { get; set; }
            public class GetSecurityPreferenceResponseSecurityPreferenceLoginProfilePreference : TeaModel {
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
            public GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference AccessKeyPreference { get; set; }
            public class GetSecurityPreferenceResponseSecurityPreferenceAccessKeyPreference : TeaModel {
                [NameInMap("AllowUserToManageAccessKeys")]
                [Validation(Required=true)]
                public bool? AllowUserToManageAccessKeys { get; set; }

            }
            [NameInMap("PublicKeyPreference")]
            [Validation(Required=true)]
            public GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference PublicKeyPreference { get; set; }
            public class GetSecurityPreferenceResponseSecurityPreferencePublicKeyPreference : TeaModel {
                [NameInMap("AllowUserToManagePublicKeys")]
                [Validation(Required=true)]
                public bool? AllowUserToManagePublicKeys { get; set; }

            }
            [NameInMap("MFAPreference")]
            [Validation(Required=true)]
            public GetSecurityPreferenceResponseSecurityPreferenceMFAPreference MFAPreference { get; set; }
            public class GetSecurityPreferenceResponseSecurityPreferenceMFAPreference : TeaModel {
                [NameInMap("AllowUserToManageMFADevices")]
                [Validation(Required=true)]
                public bool? AllowUserToManageMFADevices { get; set; }

            }
        };

    }

}
