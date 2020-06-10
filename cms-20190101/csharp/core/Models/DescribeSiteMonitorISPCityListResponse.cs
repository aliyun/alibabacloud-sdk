// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSiteMonitorISPCityListResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IspCityList")]
        [Validation(Required=true)]
        public DescribeSiteMonitorISPCityListResponseIspCityList IspCityList { get; set; }
        public class DescribeSiteMonitorISPCityListResponseIspCityList : TeaModel {
            [NameInMap("IspCity")]
            [Validation(Required=true)]
            public List<DescribeSiteMonitorISPCityListResponseIspCityListIspCity> IspCity { get; set; }
            public class DescribeSiteMonitorISPCityListResponseIspCityListIspCity : TeaModel {
                    public string Isp { get; set; }
                    public string City { get; set; }
                    public string Region { get; set; }
                    public string Country { get; set; }
                    public DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName IspName { get; set; }
                    public class DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName : TeaModel {
                        [NameInMap("en")]
                        [Validation(Required=true)]
                        public string En { get; set; }

                        [NameInMap("zh_CN")]
                        [Validation(Required=true)]
                        public string ZhCN { get; set; }

                    }
                    public DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName CityName { get; set; }
                    public class DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName : TeaModel {
                        [NameInMap("en")]
                        [Validation(Required=true)]
                        public string En { get; set; }

                        [NameInMap("zh_CN")]
                        [Validation(Required=true)]
                        public string ZhCN { get; set; }

                    }
            }
        };

    }

}
